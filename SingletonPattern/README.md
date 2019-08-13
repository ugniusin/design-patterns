# Singleton Design Pattern

### Drawbacks:
* Violates **Single Responsibility Principle** by having more than one responsibilities:
    * The key responsibility of the class by scenario.
    * The responsibility to maintain only one instance.   
* Makes Unit Testing very hard. No ability to completely isolate classes dependent on singletons.
Also, the global state of stateful singletons is preserved between test cases.
* Dependency hiding
* And more... [Singleton Pitfalls](https://www.vojtechruzicka.com/singleton-pattern-pitfalls)


### Intent
Singleton is a creational design pattern that lets you ensure that a class has only one instance, while providing a global access point to this instance.



**Source:** [Singleton Pattern](https://refactoring.guru/design-patterns/singleton)