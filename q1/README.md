# Question 1
Write a program that changes all instances of “foo” to “bar” in a JSON object. You can use any

programming language which supports dictionary datatype.

For example :

  Input JSON: { "a": [ { "foo": "foo" } ] }

  Output : { "a": [ { "bar": "bar" } ] }

Your program should work on any arbitrary JSON object and not just the test object given.

# Solution

### Language used
  Written in [Hack lang](http://hacklang.org/)

### Running instructions
  - Installation of hacklang can be found on [https://docs.hhvm.com/hack/getting-started/getting-started](https://docs.hhvm.com/hack/getting-started/getting-started)

  - $ hhvm json.php [json string] [instance to be replaced (can be a array)] [Instance replacing (can be a array)]

  - If no argument provided default test case in the question loaded
