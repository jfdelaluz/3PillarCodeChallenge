import { Navigate, Route, Routes } from 'react-router-dom';
import { LoginForm } from '../LoginForm';

export const AppRouter = () => {
  return (
    <Routes>
      <Route path="/" element={ <LoginForm /> } />
      <Route path="/*" element={ <Navigate to="/" /> } />
    </Routes>
  )
}
