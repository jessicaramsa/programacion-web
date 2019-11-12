<%@page import="java.util.Iterator"%>
<%@page import="java.util.List"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Materia a tomar</title>
    </head>
    <body>
        <h1>Materias a tomaren este semestre</h1>
        <br>
        <% 
            List materias = (List) request.getAttribute("materias");
            Iterator it = materias.iterator();
            while(it.hasNext()){
                out.print("<br>"+ it.next());
            }
        %>
    </body>
</html>
