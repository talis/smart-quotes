# Smart quotes replacement toolkit

*N.B. This is forked from https://github.com/talis/smart-quotes to provide PHP 5.3 compatibility*

The kit replaces all irregular - Microsoft version single and double quotes to simple - ASCII type ones.

## Usage example

There are two implementations - one, which converts quotes and returns content as UTF-8
and the other which does the same, but returns it as ASCII - with the exception of a pound symbol (£),
which is also returned correctly.

```
use SSD\SmartQuotes\Utf8CharacterSet;
use SSD\SmartQuotes\Factory as SmartQuotesFactory;

$string = "“Contrary to ‘popular belief’, Lorem Ipsum is not simply ‘random text’. The cost in Sterling is £20.00”";

// UTF-8 implementation
echo SmartQuotesFactory::filter(new Utf8CharacterSet, $string);

// ASCII implementation
echo SmartQuotesFactory::filter(new AsciiCharacterSet, $string);

// both return:
// "Contrary to 'popular belief', Lorem Ipsum is not simply 'random text'. The cost in Sterling is £20.00"
```