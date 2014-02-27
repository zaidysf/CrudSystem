CRUD SYSTEM
===========

This is our first Crud System to begin semothing big new!


TUTORIAL GIT >>
---------------

### if you want to commit, follow this steps below :
* Open GitHub GUI
* if repository already opened, then back to home
* press refresh on top of filter repository
* open the repository
* press sync on top right corner of the window
* DONE

### Note : if error occured because of conflicts file, follow the instructions below :
* if there's an alert box, then you choose open the shell <>
* in command shell, type "git commit -a" [ENTER]
* if notepad is opened, then type your comments on top of the text like "Conflicts File" and save (CTRL+S) - close
* in command shell, type "git pull" [ENTER]
* if the conflicts merge automatically, then you have a good luck and this problems SOLVED. But if not, you must open your conflict file (look at the first    line that appears after you execute git pull)
* in conflict file, find code between "<<<<<<< HEAD" and "=======" (it's your code), code between ""=======" and ">>>>>>> (some encrypted text)" (it's the    new code)
* after find it, backup your code, delete your code and some text from git like "<<<<<<< HEAD", "=======", ">>>>>>> (some encrypted text)" , then save the  file.
* after that, back to command shell, then type "git commit -a" [ENTER] and the result will have "Merge Branch" text after that.
* to check it, type "git pull" [ENTER] again, if the message is "Already up-to-date", then you're DONE!
* now, back to GitHub GUI, press sync on top right corner of the window
* after that, edit your solved file, and put it again your backup code then. And save it.
* and the last, commit and sync it with GitHub GUI as usual.