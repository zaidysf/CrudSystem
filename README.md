CRUD SYSTEM
===========

This is our first Crud System to begin semothing big new!


TUTORIAL GIT >>

if you want to commit, follow this steps below :
1.  Open GitHub GUI
2.  if repository already opened, then back to home
3.  press refresh on top of filter repository
4.  open the repository
5.  press sync on top right corner of the window
6.  DONE

* Note : if error occured because of conflicts file, follow the instructions below :
1.  if there's an alert box, then you choose open the shell <>
2.  in command shell, type "git commit -a" [ENTER]
3.  if notepad is opened, then type your comments on top of the text like "Conflicts File" and save (CTRL+S) - close
4.  in command shell, type "git pull" [ENTER]
5.  if the conflicts merge automatically, then you have a good luck and this problems SOLVED. But if not, you must open your conflict file (look at the first    line that appears after you execute git pull)
6.  in conflict file, find code between "<<<<<<< HEAD" and "=======" (it's your code), code between ""=======" and ">>>>>>> (some encrypted text)" (it's the    new code)
7.  after find it, backup your code, delete your code and some text from git like "<<<<<<< HEAD", "=======", ">>>>>>> (some encrypted text)" , then save the    file.
8.  after that, back to command shell, then type "git commit -a" [ENTER] and the result will have "Merge Branch" text after that.
9.  to check it, type "git pull" [ENTER] again, if the message is "Already up-to-date", then you're DONE!
10. now, back to GitHub GUI, press sync on top right corner of the window
11. after that, edit your solved file, and put it again your backup code then. And save it.
12. and the last, commit and sync it with GitHub GUI as usual.