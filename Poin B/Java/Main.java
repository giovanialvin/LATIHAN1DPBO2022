import java.util.*;

public class Main{
    public static void main(String[] args){
        
        //input methods pertama
        SoccerClub team1 = new SoccerClub();
        String[] arrplayers = {"Romeru Lukaku", "Edouard Mendy", "Mason Mount", "Kai Havertz", "N. Kante", "Thiago Silva"};
        //System.arraycopy(arrPlayers, 0, team1.setPlayers(), 0, arrplayers.length);
        team1.setPlayers(arrplayers);
        team1.setName("Chelsesa F.C.");
        team1.setYear("1905");
        team1.setNation("England");
        team1.setTrophy( "FIFA Club World Cup 2021", "2022", "Cup");


        //Output team 1
        team1.output();
        System.out.println("");

        team1.getTrophy().outputInner();

        //entaer satu kali 
        System.out.println("");

        //input methods kedua
        String[] arrplayers2 = {"Leo Sinaga", "Bambang To The Bone", "Ferdinan Tobalagi", "Osman Saloso"};
        SoccerClub team2 = new SoccerClub("Babilon F.C.", "1991", "Antah Berantah", arrplayers2);
        
        team2.output();
        team2.setTrophy("Piala Dunia Akhirat", "2099", "League");
 
    }
}