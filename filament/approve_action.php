// Adds an "Approve" button in Filament table for posts.

public static function table(Table $table): Table {
    return $table->actions([
        Action::make('approve')
            ->label('Approve')
            ->action(fn ($record) => $record->update(['status' => 'approved'])) // Updates status to "approved"
            ->successNotificationTitle('Post Approved'),
    ]);
}
