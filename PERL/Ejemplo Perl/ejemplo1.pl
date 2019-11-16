#!C:\xampp\perl\bin\perl.exe
# The above line is perl execution path in xampp
# The below line tells the browser, that this script will send html content.
# If you miss this line then it will show "malformed header from script" error.
print "Content-type: text/html\n\n";
# Example 4-1   Storing DNA in a variable, and printing it out

# First we store the DNA in a variable called $DNA
$DNA = 'ACGGGAGGACGGGAAAATTACTACGGCATTAGC';

# Next, we print the DNA onto the screen
print $DNA;

# Finally, we'll specifically tell the program to exit.
exit;