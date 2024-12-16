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
                  flicker: {
                    '0%, 10%, 30%, 100%': {
                      border: '2px solid rgb(1, 235, 252)',
                      boxShadow: '0 0 100px rgb(1, 235, 252), inset 0 0 10px rgb(255,223,0), 0 0 5px rgb(255,223,0)',
                    },
                    '5%, 25%': {
                      border: 'none',
                      boxShadow: 'none',
                    },
                  },
                  iconflicker: {
                    '0%, 10%, 30%, 100%': { opacity: '1' },
                    '5%, 25%': { opacity: '0.2' },
                  },
                
              
  
              },
              animation: {
                bounce_613: 'bounce_613 0.4s linear',
              },
              animation: {
                'spin-words': 'spin-words 4s infinite',
              },
              animation: {
                flicker: 'flicker 2s linear infinite',
                iconflicker: 'iconflicker 2s linear infinite',
              },
              
            
        },
        
    },
    plugins: [
        require('daisyui'),
        require('preline/plugin'),
    ],
};
