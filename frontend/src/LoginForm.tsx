import { ChangeEvent, FormEvent, useState } from 'react';
import { login, usersListUrl } from './services/HttpRequestService';

export const LoginForm = () => {

  const [ showAlert, setShowAlert ] = useState( false );
  const [ form, setForm ] = useState({
    email: '',
    password: '',
  });

  const loginSubmit = async ( event: FormEvent<HTMLFormElement> ) => {
    event.preventDefault();

    if ( await login( form ) ) {
      setShowAlert( false );
      window.location.href = usersListUrl;
    } else {
      setShowAlert( true );
    }
    
  };

  const updateForm = ( event: ChangeEvent<HTMLInputElement> ) => {
    setForm({
      ...form,
      [ event.target.name ]: event.target.value,
    });
  };

  return (
    <>
      <h3>Login</h3>
      <form onSubmit={ loginSubmit }>
        <div className="mb-3">
          <label className="form-label">Email address</label>
          <input
            type="email"
            className="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            name="email"
            value={ form.email }
            onChange={ updateForm }
          />
        </div>
        <div className="mb-3">
          <label className="form-label">Password</label>
          <input
            type="password"
            className="form-control"
            id="exampleInputPassword1"
            name="password"
            value={ form.password }
            onChange={ updateForm }
          />
        </div>
        <button type="submit" className="btn btn-primary">Submit</button>
      </form>

      { showAlert &&

        <div
          className="alert alert-danger alert-dismissible mt-2 fade show"
          role="alert"
        >
          <strong>Error:</strong> Coult not login. Check credentials.

          <button
            type="button"
            className="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
            onClick={ () => setShowAlert( false ) }
          ></button>
        </div>

      }
    </>
  )
};
