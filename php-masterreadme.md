# Assessment

## The project - A proof of concept

SoMuchCars4u Inc. can deliver cars to users (users.txt). Their car base is defined in a dataset *cars.json*. 

When a customer receives a car, they want to make various relations. For instance the delivery location (state; states.json) and the location of the user (again; states.json)

This is a PoC. We merely want to see what is possible. This is not going to be a production-grade, with UI provided, application. 

## Relations to be mapped  
- Customer and the exact car (type + model)
- Customers location (the state)
- Location of the car (the state)

## Business Requirements
- We would love to see one specific class to process our data files. In other words, when we have a new data-set, it should be easy to implement
- We don't want an UI, it is a PoC (proof of concept). It is important that the technical structure is properly made to show it is possible to map the data in the correct way.
- We want to have test-cases which can A: prove that our implementation is correct and B: provides way to test new data-sets

## Technical Requirements

You are free to use any tools / libs / whatever. In fact we support re-using proven technologies and innovation. Nonetheless we have a few soft-requirements; unless you can define textually why you did not want to use it. 

- PHP 7.2 minimal (please enforce this)
- Composer, namespacing, autoloaders
- Test-cases
- We love factories, interfaces and classes. 
- good use of type hinting & return types
- excessive amount of comments - describe your thoughts about features & implementations

## Good to know

Even though some things can be an overkill, we still love to see an over-usage of implementing various design-patterns. The scope & data-set is small, but it is more important to have am excessive design pattern than a simple procedural script. 

The same goes for the comments in your script(s). Be excessive about this so we can understand your way of working. 

Again; feel free to create anything you want and use anything you want.

## DoD (defintion of done)

- Prove that you have provided the means to properly process data. We don't care if we have to invoke a script manually or provide specific parameters. 
- We should have a global object with all the relations mapped for each customer
- It should be easy to add a new user and map it's values.
- Add a *poc.md* file which is your "readme" file for your project.
