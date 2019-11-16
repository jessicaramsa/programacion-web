<%-- 
    Document   : eliminar
    Created on : 13/11/2019, 05:46:33 PM
    Author     : Uroboros
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.sql.*, java.io.*" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>Eliminar</h1>
        <%
            int id = 1;
            Statement s = null;
            String codigo = request.getParameter("codigo");
            String query = "DELETE FROM usuario WHERE id = " + id;
            int res = s.executeUpdate(query);
            if (res == 1) {
                out.println("<script>alert)'Se ha eliminado el registro correctamente')</script>");
            }
        %>
    </body>
</html>
