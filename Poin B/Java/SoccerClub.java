import java.util.*;

public class SoccerClub{
    
    private String nama;
    private String nation;
    private String year;
    private String[] players;
    private Trophy tp;
    
    public SoccerClub(String namac, String nationc, String yearc, String[] playersc){
        this.nama = namac;
        this.nation = nationc;
        this.year = yearc;
        this.players = playersc;
    }

    public SoccerClub(){

    }

    public String getName(){
        return this.nama;
    }

    public void setName(String namac){
        this.nama = namac;
    }

    public String getNation(){
        return this.nation;
    }

    public void setNation(String nationc){
        this.nation = nationc;
    }

    public String getYear(){
        return this.year;
    }

    public void setYear(String yearc){
        this.year = yearc;
    }

    public String[] getPlayers(){
        return this.players;
    }

    public void setPlayers(String[] playersc){
        this.players = playersc;
    }

    
    public void output(){
        System.out.println("Name Team   : "+ this.getName());
        System.out.println("Country     : "+ this.getNation());
        System.out.println("Established : "+ this.getYear());
        System.out.println("Players     : ");

        String[] arrPlayers = new String[this.players.length];
        arrPlayers = this.players;
        int i;
        for(i = 0; i< arrPlayers.length; i++){
            System.out.println("              - "+ arrPlayers[i]);
        }

    }

    public void setTrophy(String namaKejuaraanc, String tahunc, String typec){
        tp = new Trophy();
        tp.setNamaKejuaraan(namaKejuaraanc);
        tp.setTahun(tahunc);
        tp.setType(typec);
    }

    public Trophy getTrophy(){
        return tp;
    }

    public class Trophy{
        private String namaiKejuaraan;
        private String tahun;
        private String type;

        public Trophy(String namaKejuaraanc, String tahunc, String typec){
            this.namaiKejuaraan = namaKejuaraanc;
            this.tahun = tahunc;
            this.type = typec;

        }

        public Trophy(){

        }

        public String getNamaKejuaraan(){
            return this.namaiKejuaraan;
        }

        public String getTahun(){
            return this.tahun;
        }

        public String getType(){
            return this.type;
        }

        public void setNamaKejuaraan(String namaKejuaraanc){
            this.namaiKejuaraan = namaKejuaraanc;
        }

        public void setTahun(String tahunc){
            this.tahun = tahunc;
        }

        public void setType(String typec){
            this.type = typec;
        }

        public void outputInner(){
            System.out.println("Last Trophy : "+ this.getNamaKejuaraan());
            System.out.println("Year        : "+ this.getTahun());
            System.out.println("Type        : "+ this.getType());
    
        }

    }
    




}