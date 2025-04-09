<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReplyMail;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->disabled(),
                TextInput::make('email')->disabled(),
                TextInput::make('subject')->disabled(),
                Textarea::make('message')->rows(6)->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('subject'),
                TextColumn::make('created_at')->label('Received')->dateTime()->sortable(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
                Action::make('reply')
                    ->icon('heroicon-o-paper-airplane')
                    ->label('Reply')
                    ->modalHeading('Reply to Contact')
                    ->form([
                        Textarea::make('reply_message')
                            ->label('Message')
                            ->required()
                            ->rows(6),
                        FileUpload::make('attachments')
                            ->label('Anhänge')
                            ->multiple()
                            ->maxSize(5120)
                            ->disk('local')
                            ->directory('contact-replies')
                            ->preserveFilenames(),
                    ])
                    ->action(function (Contact $record, array $data) {
                        $attachments = $data['attachments'] ?? [];

                        // Lade die Dateien aus dem Storage
                        $attachmentFiles = collect($attachments)->map(function ($path) {
                            return new UploadedFile(
                                storage_path("app/{$path}"),
                                basename($path),
                                mime_content_type(storage_path("app/{$path}")),
                                null,
                                true
                            );
                        })->toArray();

                        // Sende die E-Mail
                        Mail::to($record->email)->send(
                            new ContactReplyMail($data['reply_message'], $attachmentFiles)
                        );


                        // Lösche die Anhänge aus dem Storage (optional)
                        foreach ($attachments as $path) {
                            Storage::delete($path);
                        }
                    })
                    ->modalButton('Send Reply')
                    ->color('primary'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
        ];
    }
}
