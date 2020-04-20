package controller;

import model.User;

import java.io.IOException;

import java.net.Inet4Address;
import java.net.InetAddress;
import java.net.NetworkInterface;
import java.net.URL;
import java.security.Security;
import java.util.Locale;
import java.util.Properties;
import java.util.ResourceBundle;

import javax.mail.Message;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TextField;
import javafx.scene.control.ToggleGroup;
import javafx.scene.layout.AnchorPane;
import java.sql.*;

public class PcCleanerController implements Initializable {
	private String mailhost = "smtp.gmail.com";
	 User u=new User();
	 @FXML
		private Label id;
	@FXML
	private AnchorPane rootPane;
	@FXML
	private AnchorPane pane2;
	@FXML
	private AnchorPane pane3;
	@FXML
	private AnchorPane paneok;
	ObservableList<String> cities = FXCollections.observableArrayList();	
	@FXML
	private ComboBox<String> location = new ComboBox<String>(cities);    
	@FXML
    private TextField nameField;	
	@FXML
    private TextField emailField;	
	@FXML
    private TextField phoneField;
	@FXML
	private ToggleGroup payment;
	@FXML
	private TextField key;
		
  	@Override
    public void initialize(URL url, ResourceBundle resourceBundle) {  		

        String[] locales1 = Locale.getISOCountries();
        for (String countrylist : locales1) {
            Locale obj = new Locale("", countrylist);
            String[] city = { obj.getDisplayCountry() };
            for (int x = 0; x < city.length; x++) {
                cities.add(obj.getDisplayCountry());
            }
        }
        location.setItems(cities);     		
  	}
  	
  	 public Connection getConnection() {
     	Connection conn;
     	try {
     		
     		 // create a mysql database connection
     	      String myDriver = "com.mysql.jdbc.Driver";
     	      String myUrl = "jdbc:mysql://localhost:3306/cleanpro";
     	      Class.forName(myDriver);
     	       conn = DriverManager.getConnection(myUrl, "root", "");
     		return conn;
     	}
     	catch (Exception e){
     		e.printStackTrace();
     		return null;
     	}
     }
  	 public void executeQuery(String query) {
     	Connection conn = getConnection();
     	Statement st;
     	try {
 			st = conn.createStatement();
 			st.executeUpdate(query);
 		} catch (Exception e) {
 			e.printStackTrace();
 		}
     }
  	 
  @FXML	
   public void insertButton(ActionEvent event) throws Exception {
    	
		AnchorPane pane;
		try {
			Properties p = System.getProperties(); 
		  	String name = p.getProperty("user.name");
	  		String hostname = Inet4Address.getLocalHost().getHostName();
			String ipadd=Inet4Address.getLocalHost().getHostAddress();
			InetAddress ipAddress = InetAddress.getLocalHost();
			  NetworkInterface networkInterface = NetworkInterface
			          .getByInetAddress(ipAddress);
			  byte[] macAddressBytes = networkInterface.getHardwareAddress();
			  StringBuilder macAddressBuilder = new StringBuilder();

			  for (int macAddressByteIndex = 0; macAddressByteIndex < macAddressBytes.length; macAddressByteIndex++)
			  {
			      String macAddressHexByte = String.format("%02X",macAddressBytes[macAddressByteIndex]);
			      macAddressBuilder.append(macAddressHexByte);
			      if (macAddressByteIndex != macAddressBytes.length - 1)
			      {
			          macAddressBuilder.append(":");
			      }
			  }
			  
			String system = System.getProperty("os.name");
			RadioButton selectedRadioButton = (RadioButton) payment.getSelectedToggle();
			String toogleGroupValue = selectedRadioButton.getText();
			
			double 	n = (int)(Math.random()*1000);

			
			String query = "insert into user(id,systemName,ip,location,email,flag,name,phoneNumber,macAddress,os,payment,password) values(NULL,'"+hostname+"','"+ipadd+"',"
					+ "'"+location.getValue()+"','"+emailField.getText()+"',0,'"+nameField.getText()+"'"
							+ ",'"+phoneField.getText()+"','"+macAddressBuilder.toString()+"','"+system+"','"+toogleGroupValue+"','"+nameField.getText()+"  "+n+"')";

			executeQuery(query);
			
			if (!toogleGroupValue.equals("Free month")) {
				pane = FXMLLoader.load(getClass().getResource("/views/payment.fxml"));
				rootPane.getChildren().setAll(pane);
			}
			else {
				System.out.println(n);
			
				sendMail(
					"Licence Key",
					"Hello!  Your licence key is "+nameField.getText()+"  "+n,
					"pccleaner03@gmail.com" ,
					emailField.getText());
				System.out.println("ouiiii");

				pane = FXMLLoader.load(getClass().getResource("/views/checkmail.fxml"));
				rootPane.getChildren().setAll(pane);

			}
			
			
			

		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
  }
  
  @FXML
  public void login(ActionEvent e) throws IOException, SQLException {
	  String login = key.getText();
	  Connection connection = getConnection();
  		String query = "SELECT * FROM user where password='"+login+"' ";
  		Statement st;
  		ResultSet rs;
  		st = connection.createStatement();
		rs = st.executeQuery(query);
		if(rs.next()) {	
			 String query2 = "UPDATE user SET flag=1 WHERE ID="+rs.getInt("id")+"";
		     executeQuery(query2);

			 u.setId(rs.getInt("id"));
		     System.out.println(u.getId());
		     
			 AnchorPane pane;
		     pane = FXMLLoader.load(getClass().getResource("/views/test.fxml"));
			 pane2.getChildren().setAll(pane);
			 
		     id.setText( Integer.toString(rs.getInt("id")));

			} 

  }
  
  @FXML
  public void logout(ActionEvent e) throws IOException, SQLException {
	  Connection connection = getConnection();
	         		     
			System.out.println(this.id);
			String query2 = "UPDATE user SET flag=0 WHERE ID="+this.id+"";
		    executeQuery(query2);
			AnchorPane pane;
		    pane = FXMLLoader.load(getClass().getResource("/views/login.fxml"));
			pane3.getChildren().setAll(pane);
			 
  }
  
  @FXML
  public void handle(ActionEvent e) throws IOException {
		AnchorPane pane;
      System.out.println("This link is clicked");
      pane = FXMLLoader.load(getClass().getResource("/views/PcCleaner.fxml"));
		pane2.getChildren().setAll(pane);
  }
  
  @FXML
  public void already(ActionEvent e) throws IOException {
		AnchorPane pane;

      pane = FXMLLoader.load(getClass().getResource("/views/login.fxml"));
		rootPane.getChildren().setAll(pane);
  }
  
  @FXML
  public void ok(ActionEvent e) throws IOException {
	
	  AnchorPane pane;
      pane = FXMLLoader.load(getClass().getResource("/views/login.fxml"));
		paneok.getChildren().setAll(pane);
  }
  
  public synchronized void sendMail(String subject, String body,
			String sender, String recipients) throws Exception {
		
		Security.addProvider(new com.sun.net.ssl.internal.ssl.Provider());

		Properties props = new Properties();
		props.setProperty("mail.transport.protocol", "smtp");
		props.setProperty("mail.host", mailhost);
		props.put("mail.smtp.auth", "true");
		props.put("mail.smtp.port", "465");
		props.put("mail.smtp.socketFactory.port", "465");
		props.put("mail.smtp.socketFactory.class",
				"javax.net.ssl.SSLSocketFactory");
		props.put("mail.smtp.socketFactory.fallback", "false");
		props.setProperty("mail.smtp.quitwait", "false");

		Session session = Session.getDefaultInstance(props,
				new javax.mail.Authenticator() {
					protected PasswordAuthentication getPasswordAuthentication() {
						return new PasswordAuthentication(
								"pccleaner03@gmail.com", "pccleaner@123");
					}
				});

		MimeMessage message = new MimeMessage(session);
		message.setSender(new InternetAddress(sender));
		message.setSubject(subject);
		message.setContent(body, "text/plain");
		if (recipients.indexOf(',') > 0)
			message.setRecipients(Message.RecipientType.TO, InternetAddress
					.parse(recipients));
		else
			message.setRecipient(Message.RecipientType.TO, new InternetAddress(
					recipients));

		Transport.send(message);
	}
  }
