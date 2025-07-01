/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package coordenador;

/**
 *
 * @author aluno
 */
public abstract class Coordenador {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args){
        
      public int idcoordenador;
      public String nome;
      public String email;
      public String senha;

        public Coordenador() {
        }

        public Coordenador(String nome, String email, String senha) {
            this.nome = nome;
            this.email = email;
            this.senha = senha;
        }

        public String getNome() {
            return nome;
        }

        public void setNome(String nome) {
            this.nome = nome;
        }

        public String getEmail() {
            return email;
        }

        public void setEmail(String email) {
            this.email = email;
        }

        public String getSenha() {
            return senha;
        }

        public void setSenha(String senha) {
            this.senha = senha;
        }

        @Override
        public String toString() {
            return "Coordenador{" + "nome=" + nome + ", email=" + email + ", senha=" + senha + '}';
        }
      
      
        
    }



