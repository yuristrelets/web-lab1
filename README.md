### Create task for user

```
const logger = new FileLogger();
const defaultNotifier = new EmailUserNotifier();

const task = new Task(logger);
const user = new User(defaultNotifier);

user.assignTask(task);
```

### Change default notifier

```
const defaultNotifier = new SmsUserNotifier(); // new EmailUserNotifier();
```

### Change task

```
const logger = new FileLogger();
const defaultNotifier = new EmailUserNotifier();

const task = new Task(logger);
const user = new User(defaultNotifier);

// add changes to task

task.saveChanges(user);
```

### Add user to project

```
const defaultNotifier = new EmailUserNotifier();
const smsNotifier = new SmsUserNotifier();

const admin = new User(defaultNotifier);
const project = new Project(admin, defaultNotifier);

project.addUser(user, smsNotifier);
```
