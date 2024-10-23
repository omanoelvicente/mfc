function handleLogin(event) {
    event.preventDefault();
    const username  = document.getElementById('input-username').value;
    const password  = document.getElementById('input-password').value;

    console.log(`username:  ${username}`);
    console.log(`password:  ${password}`);

    alert(`Login com:  ${username}, \n ${password}`);

    document.getElementById('form-logion').addEventListener('submit', handleLogin);
 } 
