# PHP Design Patterns

## Specification 
Run tests

```
1. ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unit/Box/ItemTest 

2. ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unit/Behavioral/Specification/Box/SpecificationTest

```
Books: 
Eric Evans Domain-Driven Design

### Tethys
Find out whether the object meets the rules

Select an object from the collection according to the rules

Create a new object that will comply with the rules

Entity class cluttered with logical checks

Or this checks in the trait


### What specification do?
Describes a business rule that can be combined with others.

Business rules can be recombined by chaining the business rules together using boolean logic.

Maintain unity of content

Simplify code readability and reduce cognitive load
