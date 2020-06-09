print('content-type : text/html\n\n';)

import cgi
form = cgi.FieldStroage()

message=form.getvalue('message_py')

print(message+"from python")
