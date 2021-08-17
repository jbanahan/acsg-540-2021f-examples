Git is code revision tracking software

It provides the who, what, where, when; you must provide the why with a message.

1. Installation
Windows:
https://git-scm.com/ 

Linux:
`sudo apt install git`

MacOS:
`brew install git`

2. Setup:
```
git config --global user.name "John Doe" 
git config --global user.email johndoe@example.com 
git config user.name 
```

3. Authenticate you local machine with GitHub
Follow instructions here and watch the related course video
https://docs.github.com/en/github/authenticating-to-github/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent

3. Create your local project directory space
    1. Create directory
    2. Run `git init`

4. Create a repository on GitHub

5. Use the commands provided by the new repository to set the remote repo in the local project directory.
Probably something like this
```
git remote add origin git@github.com:youraccount/something.git
git branch -M main
git push -u origin main
```

6. Setup complete use Git to commit changes you're confident works and is worth saving
```
git add . # This will add all new file changes
git commit -m "Adding files which creating base project"
git push -u origin main
```
