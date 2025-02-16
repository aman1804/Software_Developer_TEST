// Add a dropdown filter for roles in Filament tables.

public static function table(Table $table): Table {
    return $table
        ->filters([
            SelectFilter::make('role')
                ->options([
                    'admin' => 'Admin',
                    'editor' => 'Editor',
                    'user' => 'User',
                ])
        ]);
}
