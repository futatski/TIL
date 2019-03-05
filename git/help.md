# リモートブランチが見えない＆PULL/Fetch出来ない
## massage
```
$ git fetch origin
Enter passphrase for key '/c/Users/yokota/.ssh/id_rsa':
error: cannot lock ref 'refs/remotes/origin/dev': unable to resolve reference refs/remotes/origin/dev: Invalid argument
From bitbucket.org:hotpowers/hp
 ! [new branch]      dev        -> origin/dev  (unable to update local ref)
```

## 対処
おそらくリファレンスが死んでるから
.git/refs/remotes/origin/dev
のファイルを消してから再度fetchする

### コマンド
```
$ git fetch origin
Warning: Permanently added the RSA host key for IP address '18.205.93.1' to the list of known hosts.
Enter passphrase for key '/c/Users/yokota/.ssh/id_rsa':
From bitbucket.org:hotpowers/hp
   a24bb07..360ad00  dev        -> origin/dev
```
