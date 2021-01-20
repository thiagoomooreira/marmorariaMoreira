using MarmorariaMoreira.Context;
using MarmorariaMoreira.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace MarmorariaMoreira.ViewModel
{
    public class HomeVM
    {
        private ContextModel db = new ContextModel();

        public List<Entrada> entradas = new List<Entrada>();
        public List<Saida> saidas = new List<Saida>();

        public List<Entrada> ListarEntradas()
        {
            entradas = db.Entradas.Where(l => l.Data.Month == DateTime.Now.Month).ToList();
            return entradas;
        }

        public List<Saida> ListarSaidas()
        {
            saidas = db.Saidas.Where(l => l.Data.Month == DateTime.Now.Month).ToList();
            return saidas;
        }

        public decimal CalculaValorVendas()
        {
            decimal total = 0;
            foreach (var e in ListarEntradas())
                total += e.Valor;

            return total;
        }

        public decimal CalculaValorDespesas()
        {
            decimal total = 0;
            foreach (var s in ListarSaidas())
                total += s.Valor;

            return total;
        }
    }
}