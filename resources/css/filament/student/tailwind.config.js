import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/Student/**/*.php',
        './resources/views/filament/student/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
}
