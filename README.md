# Project PROOF

This project is a exercise of proof 

## Documentation

Here I will explain the essentials and the folders that I modified

### Structure

- App
    - Http => This is the folder where the drivers are stored where we have the essential logic for communication between the view and the DB.
        - Request => It is a simpler way to validate the data we send to the controller and also be able to personalize the messages.
    - Models => They are the models in our database

- Database
    - migrations => It is where our files will be created to create the tables when we migrate it.
    - seeder => Here we can insert real data or test data to have an initial load of data

- Resources
    - Views => Here where we create our components and layouts
---
# Run project

- First you must have docker installed
- If you don't have it installed you can create a LAMP
- If I have docker installed, let's go where the project location is.
```bash
cd route_path_project
```
- then we execute the following command to start the project
```bash
./vendor/bin/sail up
```
- With this command start running our containerized projects
