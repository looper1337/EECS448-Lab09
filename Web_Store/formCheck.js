const invalidUsername = (username) => {
  //really simple email check using a regular expression.
  return !(/\S+@\S+\.\S+/).test(username);
};

document.getElementById('form').addEventListener('submit', action => {
  if (invalidUsername(document.querySelector('input[type=text]').value)) {
    alert("Wrong username!");
    action.preventDefault(); 
  } else if (document.querySelector('input[type=password]').value === "") {
    alert("Password must be entered.");
    action.preventDefault();
  }
});

document.querySelector('input[type=button]').addEventListener('click', reset => {
  location.reload(); 
});