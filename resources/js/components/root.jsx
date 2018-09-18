import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Login from './login';

export default class Root extends Component {
    render() {
        return (
            <Login />
        );
    }
}

if (document.getElementById('root')) {
    ReactDOM.render(<Root />, document.getElementById('root'));
}
