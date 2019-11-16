#!C:\xampp\perl\bin\perl.exe
# The above line is perl execution path in xampp

use CGI qw(param());

# The below line tells the browser, that this script will send html content.
# If you miss this line then it will show "malformed header from script" error.
print "Content-type: text/html\n\n";

my $par_usuario     = param('usuario' );
my $par_password    = param('password' );

if (not $par_usuario  or  not $par_password) {
	print 'Se debe ingresar con un usuario y contrase&ntilde;a';
	exit;
}else{
	print "\nUsuario:\n\n";
	print $par_usuario;
	print "\nContrase&ntilde;a:\n\n";
    print $par_password;
}

exit;