I'm not a real programmer. I throw together things until it
works then I move on. The real programmers will say
"Yeah it works but you're leaking memory everywhere. Perhaps we
should fix that." I’ll just restart Apache every 10 requests. 
            -- Rasmus Lerdorf
%
INF < [] < [0] < [1] < [0, 1] < {} < INF
%
INF is smaller than itself, greater than itself, not equal (==) to itself, but
identical to itself (===)
%
There are people who actually like programming. I don't understand why they like programming.
            -- Rasmus Lerdorf
%
I was really, really bad at writing parsers. I still am really bad at writing parsers.
            -- Rasmus Lerdorf
%
For all the folks getting excited about my quotes. Here is another
- Yes, I am a terrible coder, but I am probably still better than you :)
            -- Rasmus Lerdorf
%
Roughly eighty percent of the arguments against PHP are rooted in ignorance.
            -- Gabriel Manricks
%
Since then, [PHP] has gone through multiple paradigm shifts, transforming
into a functional language, like C, and then to the fully OOP language
that we enjoy today.
            -- Gabriel Manricks
%
>>> 0x0 +2
4
>>> 0x0 +3.5
6.5
>>> 0x0 +2e1
757
%
'9223372036854775807' == '9223372036854775808'
%
Currently PHP uses a single-pass compilation process, i.e. the parser directly
invokes opcode compilation routines.
%
Parse error: parse error, unexpected T_PAAMAYIM_NEKUDOTAYIM
%
int strcmp ( string $str1 , string $str2 )
Returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2,
and 0 if they are equal.
            -- PHP Documentation
NOT MENTIONED: strcmp also returns 0 on error.
%
json_decode takes a flag to choose one of two embedding schemes. One silently
turns empty objects into empty lists, the other replaces "" with "_empty_".
%
Infinite recursion crashes. There's no fix for that.
            -- jani@php.net, marking a PHP parser segfault as "not a bug"
%
php > echo +"one";
0
%
php > $db=dba_open("/tmp/test.db", "c", "db4"); dba_nextkey($db);
Segmentation fault
%
php > print 07;
7
php > print 08;
0
(PHP dealing with invalid octals. Both Perl and Python would give you errors in these cases.)
