<%-- 
    Document   : insertar
    Created on : 13/11/2019, 05:18:33 PM
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
        <h1>Insertar</h1>
        <%
            String id = request.getParameter("id");
            String username = request.getParameter("username");
            String password = request.getParameter("password");
            
            PreparedStatement ps = null;
            Connection connection = null;
            Class.forName("com.mysql.jdbc.Driver");
            connection = DriverManager.getConnection("jdbc:mysql://localhost/expo_jsp_conexion", "root", "");
            
            String query = "INSERT INTO usuario VALUES(?, ?, ?)";
            ps = connection.prepareStatement(query);
            
            ps.setString(1, id);
            ps.setString(2, username);
            ps.setString(3, password);
            
            ps.executeUpdate();
            connection.close();
        %>
    </body>
</html>
