document.addEventListener('DOMContentLoaded', function () {
    const loanStorageForm = document.getElementById('loanStorageForm');

    loanStorageForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const data = {
            username: document.getElementById('username').value,
            password: document.getElementById('Password').value,
            domain: document.getElementById('Domain').value
        }
        const queryString = Object.keys(data)
            .map(key => encodeURIComponent(key) + '=' + encodeURIComponent(data[key]))
            .join('&');
        fetch('http://www.backend.com/', {
            method: 'POST',
            credentials: 'include',
            body: queryString,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        })
            .then((response) => {
		console.log(response);
                if (!response.ok) {
                    throw new Error('Failed to create account');
                }
                return response.json();
            })
            .then((result) => {
                alert('Success: Account was created.');
                //window.location.replace(`http://${data.domain}`);
            })
            .catch((error) => {
                alert('Error: Failed to create account.');
                console.error('Error:', error);
            });
    });
});
