<%-- 
    Document   : modificar
    Created on : 13/11/2019, 05:33:15 PM
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
        <h1>Modificar</h1>
        <%
            int id = 1;
            String username = request.getParameter("username");
            String password = request.getParameter("password");
            
            Statement ps = null;
            Connection connection = null;
            Class.forName("com.mysql.jdbc.Driver");
            connection = DriverManager.getConnection("jdbc:mysql://localhost/expo_jsp_conexion", "root", "");
            
            ps = connection.createStatement();
            String sql = "UPDATE usuario SET username = " + username + ", "
                    + "password = " + password + " WHERE id = " + id;
            int res = ps.executeUpdate(sql);
        %>
    </body>
</html>
