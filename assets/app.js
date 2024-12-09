// assets/app.js
import React from 'react';
import ReactDOM from 'react-dom';
import Hola from './js/components/hola';

ReactDOM.render(
    <React.StrictMode>
        <Hola />
    </React.StrictMode>,
    document.getElementById('root') // Este es el contenedor principal donde React montará tu componente
);
