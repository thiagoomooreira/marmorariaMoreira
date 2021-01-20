using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace MarmorariaMoreira.Models
{
    [Table("Cliente")]
    public class Cliente
    {
        [Column("Id"),Key]
        public int Id { get; set; }

        [Column("Nome")]
        public string Nome { get; set; }

        [Column("Contato")]
        public string Contato { get; set; }

        [Column("Endereco")]
        public string Endereco { get; set; }
    }
}