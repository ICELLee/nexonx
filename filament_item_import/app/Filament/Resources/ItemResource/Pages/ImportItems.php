<?php

namespace App\Filament\Resources\ItemResource\Pages;

use App\Filament\Resources\ItemResource;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;
use Filament\Actions\Action;

class ImportItems extends Page
{
    protected static string \$resource = ItemResource::class;

    protected static string \$view = 'filament.resources.item-resource.pages.import-items';

    public ?string \$txt_file = null;

    public function mount(): void
    {
        \$this->form->fill();
    }

    public function form(Form \$form): Form
    {
        return \$form->schema([
            Forms\Components\FileUpload::make('txt_file')
                ->label('TXT Datei hochladen')
                ->disk('local')
                ->directory('imports')
                ->acceptedFileTypes(['.txt'])
                ->required()
        ])->statePath('data');
    }

    public function submit(): void
    {
        \$path = \$this->form->getState()['txt_file'];
        \$content = Storage::disk('local')->get(\$path);
        \$items = preg_split("/\n\s*\n/", \$content);

        \$imported = 0;

        foreach (\$items as \$block) {
            preg_match('/ID:\s*(\d+)/', \$block, \$id);
            preg_match('/Name:\s*(.+)/', \$block, \$name);
            preg_match_all('/- TAG_([A-Z0-9_]+)/', \$block, \$tags);
            preg_match('/DefaultColors:\s*(.+)/', \$block, \$colors);
            preg_match('/graphicsResourceidentifier:\s*(.+)/', \$block, \$graphic);

            if (!isset(\$id[1]) || !isset(\$name[1])) continue;

            Item::updateOrCreate(
                ['item_id' => \$id[1]],
                [
                    'name' => \$name[1],
                    'tags' => \$tags[1] ?? [],
                    'colors' => \$colors[1] ?? null,
                    'graphic_identifier' => \$graphic[1] ?? null,
                    'visible' => true,
                ]
            );

            \$imported++;
        }

        Notification::make()
            ->title("Erfolg")
            ->body("{\$imported} Items wurden importiert.")
            ->success()
            ->send();
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('submit')
                ->label('Importieren')
                ->submit('submit')
        ];
    }
}
