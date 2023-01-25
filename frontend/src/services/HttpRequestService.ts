import axios from 'axios';

const apiUrl = 'http://127.0.0.1:8000';
const usersListUrl = `${ apiUrl }/users`;

const login = async ( credentials: any ): Promise<boolean> => {

  try {

    const { status, data } = await axios.post( `${ apiUrl }/api/auth`, credentials );

    if ( status !== 200 || !data.ok ) return false;

    return true;
    
  } catch ( error ) {
    throw Error( 'Unable to login' );
  }
  
};

export {
  login,
  usersListUrl
};