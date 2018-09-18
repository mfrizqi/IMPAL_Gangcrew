import React, { Component } from 'react';

class Login extends Component {
    render() {
        return(
            <div className="outer-container flat-background">
                <div className="fade-ct">
                    <div className="container">
                        <div className="row">
                            <div className="col-md-6">
                                <LeftLogin />
                            </div>
                            <div className="col-md-6 text-center">
                                <RightLogin />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

class LeftLogin extends Component {
    render() {
        return (
            <div className="left-login">
                <div className="text-login">
                    <h2>Sign in to <br /> your account</h2>
                </div>
            </div>
        )
    }
}

class RightLogin extends Component {
    render() {
        return (
            <div className="right-login">
                <form action="" class="custom-form">
                    <input type="text" className="form-control mb-3" placeholder="Username"/>
                    <input type="text" className="form-control mb-3" placeholder="Password"/>
                    <button type="submit" className="btn btn-block key-back-color">Login</button>
                    <br/>
                    <p className="text-white mb-1">Don't have an account?</p>
                    <a href="http://localhost:8000/register" className="text-white text-underline">Sign up now!</a>
                </form>
            </div>
        )
    }
}

export default Login;