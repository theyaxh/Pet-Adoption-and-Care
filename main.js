const isUserSignedIn = true;

const signinSection = document.getElementById('signin-section');
const accountSection = document.getElementById('account-section');

if (isUserSignedIn) {
    signinSection.style.display = 'none';
    accountSection.style.display = 'block';
} else {
    signinSection.style.display = 'block';
    accountSection.style.display = 'none';
}