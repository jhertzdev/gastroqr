import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Menu from "./Menu";
import Login from "./components/auth/Login";
import DashBoardAdmin from "./components/administrador/DashBoardAdmin";
function App() {
  return (
    <Router>
      <Switch>
        <Route exact path="/" component={Menu} />
        <Route exact path="/login" component={Login} />
        <Route exact path="/dashboard-admin" component={DashBoardAdmin} />
      </Switch>
    </Router>
  );
}

export default App;
