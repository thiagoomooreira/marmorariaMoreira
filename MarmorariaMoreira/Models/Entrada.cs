using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace MarmorariaMoreira.Models
{
    [Table("Entrada")]
    public class Entrada
    {
        [Column("Id"),Key]
        public int Id { get; set; }

        [Column("Descricao")]
        public string Descricao { get; set; }

        [Column("Valor")]
        public decimal Valor { get; set; }

        [Column("Data")]
        public DateTime Data { get; set; }

        [Column("IdCliente")]
        public int IdCliente { get; set; }

        [ForeignKey("IdCliente")]
        public Cliente Cliente { get; set; }
    }
}