using MarmorariaMoreira.Context;
using MarmorariaMoreira.Models;
using MarmorariaMoreira.ViewModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace MarmorariaMoreira.Controllers
{
    public class HomeController : Controller
    {
        private ContextModel db = new ContextModel();

        public ActionResult Index()
        {
            HomeVM homeVM = new HomeVM();
            return View(homeVM);
        }

        [HttpPost,ValidateAntiForgeryToken]
        public ActionResult Cadastrar(string tipo,string descricao,string valor,string data)
        {
            if (tipo == "entrada")
            {
                Entrada entrada = new Entrada();
                entrada.Descricao = descricao;
                entrada.Valor = Convert.ToDecimal(valor);
                entrada.Data = Convert.ToDateTime(data);
                db.Entradas.Add(entrada);
            }
            else
            {
                Saida saida = new Saida();
                saida.Descricao = descricao;
                saida.Valor = Convert.ToDecimal(valor);
                saida.Data = Convert.ToDateTime(data);
                db.Saidas.Add(saida);
            }
            db.SaveChanges();
            return RedirectToAction("Index");
        }
    }
}