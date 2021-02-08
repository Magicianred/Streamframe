To make JSX runs faster, install the JSX preprocessor

Firstly, download Node.js from here

https://nodejs.org/en/

Then use these commands

Step 1: Run npm init -y 

If Step 1 fails and gives an "Invalid name" error, rename the project folder to only contain lowercase ASCII letters or hyphens and try again
example:
my-streamframe

Step 2: Run npm install babel-cli@6 babel-preset-react-app@3

Step 3: Create a folder called src and run this command in terminal

npx babel --watch src --out-dir . --presets react-app/prod

Don't wait for the command to finish as it is an automated watcher for JSX

------------------------------------------------------------------------------------------------------------------------------------------------------------
MYSQL

Step 1: Download and Install XAMPP
Step 2: Put the main folder in HTDOCS of XAMPP
Step 3: Open XAMPP as admin
Step 4: Turn on both Apache and MySQL
