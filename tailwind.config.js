import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        'node_modules/preline/dist/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                bounce_613: {
                  '40%': { transform: 'scale(1.4)' },
                  '60%': { transform: 'scale(0.8)' },
                  '80%': { transform: 'scale(1.2)' },
                  '100%': { transform: 'scale(1)' },
                },
                'spin-words': {
                    '10%': { transform: 'translateY(-102%)' },
                    '25%': { transform: 'translateY(-100%)' },
                    '35%': { transform: 'translateY(-202%)' },
                    '50%': { transform: 'translateY(-200%)' },
                    '60%': { transform: 'translateY(-302%)' },
                    '75%': { transform: 'translateY(-300%)' },
                    '85%': { transform: 'translateY(-402%)' },
                    '100%': { transform: 'translateY(-400%)' },
                  },
  
              },
              animation: {
                bounce_613: 'bounce_613 0.4s linear',
              },
              animation: {
                'spin-words': 'spin-words 4s infinite',
              },
              
            
        },
        
    },
    plugins: [
        require('daisyui'),
        require('preline/plugin'),
    ],
};
