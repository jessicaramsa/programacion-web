package Utils;

import java.sql.*;

/**
 *
 * @author jessicaramsa
 */
public class ConexionBD {
    public static Connection getConexion() {
        Connection con = null;
        try {
            Class.forName("com.mysql.jdbc.Driver");
            con = DriverManager.getConnection("jdbc:mysql://localhost/clinica?user=root&password=Cluster.8");
            System.out.println("Conexión exitosa");
        } catch (Exception e) {
            System.out.println("Error. " + e);
        }
        return con;
    }

    public static void main(String[] arg) {
        ConexionBD.getConexion();
    }
}
