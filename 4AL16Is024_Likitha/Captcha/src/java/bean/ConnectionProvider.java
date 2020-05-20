package bean;
import java.sql.*;
import static bean.Provider.*;

public class ConnectionProvider {
	static Connection con=null;
	static{
		try{
			Class.forName(DRIVER);
con=DriverManager.getConnection(CONNECTION_URL,USERNAME,PASSWORD);
			}catch(Exception e){}
	}
	public static Connection getCon(){
		return con;
	}

    static Connection getcon() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
