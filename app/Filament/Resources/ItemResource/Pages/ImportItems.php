<?php

namespace App\Filament\Resources\ItemResource\Pages;

use App\Filament\Resources\ItemResource;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Storage;

class ImportItems extends Page
{
    protected static string $resource = ItemResource::class;

    protected static string $view = 'filament.resources.item-resource.pages.import-items';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\FileUpload::make('txt_file')
                ->label('TXT Datei hochladen')
                ->acceptedFileTypes(['text/plain', '.txt'])
                ->disk('local')
                ->directory('temp-imports')
                ->required(),
        ])->statePath('data');
    }

    public function submit(): void
    {
        $path = $this->form->getState()['txt_file'];

        if (!$path || !Storage::disk('local')->exists($path)) {
            Notification::make()
                ->title('Upload fehlgeschlagen')
                ->body('Die Datei konnte nicht gelesen werden.')
                ->danger()
                ->send();
            return;
        }

        $content = Storage::disk('local')->get($path);

        if (!$content) {
            Notification::make()
                ->title('Leere Datei')
                ->danger()
                ->send();
            return;
        }

        $blocks = preg_split('/(?=^ID:\s*\d+)/m', $content, -1, PREG_SPLIT_NO_EMPTY);
        $imported = 0;
        $errors = [];

        foreach ($blocks as $index => $block) {
            $id = null;
            $name = null;
            $tags = [];
            $graphic = null;

            $lines = preg_split('/\r\n|\r|\n/', $block);

            foreach ($lines as $line) {
                $line = trim($line);

                if (preg_match('/^ID:\s*(\d+)/', $line, $match)) {
                    $id = $match[1];
                } elseif (preg_match('/^Name:\s*(.+)/', $line, $match)) {
                    $name = $match[1];
                } elseif (preg_match('/^- TAG_([A-Z0-9_]+)/', $line, $match)) {
                    if (in_array($match[1], ['BOY', 'GIRL', 'VIP'])) {
                        $tags[] = $match[1];
                    }
                } elseif (preg_match('/^graphicsResourceidentifier:\s*(.+)/i', $line, $match)) {
                    $graphic = $match[1];
                }
            }

            if (!$id || !$name) {
                $errors[] = "⚠️ Fehler beim Block ".($index + 1).": ID oder Name fehlt.";
                continue;
            }

            Item::updateOrCreate(
                ['item_id' => $id],
                [
                    'name' => $name,
                    'tags' => $tags,
                    'graphic_identifier' => $graphic,
                    'visible' => true,
                ]
            );

            $imported++;
        }

        Notification::make()
            ->title('Import abgeschlossen')
            ->body("{$imported} Items importiert. ".(count($errors) ? count($errors)." Fehler gefunden." : ""))
            ->success()
            ->send();

        if (!empty($errors)) {
            Notification::make()
                ->title('Import Warnungen')
                ->body(implode("\n", array_slice($errors, 0, 5))) // max 5 anzeigen
                ->danger()
                ->send();
        }
    }


    protected function getHeaderActions(): array
    {
        return [];
    }
}
