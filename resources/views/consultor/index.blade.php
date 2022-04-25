@extends('layouts.app')
@section('content')

      <td nowrap valign="bottom" align="center" class="cel_tab" height="35">
            <input type="submit" value name="nothing2" class="nothing">
&nbsp;&nbsp;
      </td>
      <form action="con_desempenho.htm">
        <td nowrap valign="bottom" align="center">
          <span class="cel_tab">
          <input type="submit" value="Por Consultor" name="act22223" class="tab_current">
          </span>
      </td>
      </form>
      <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
      <form action="con_desempenho_aba_cliente.htm">
          <td nowrap valign="bottom" align="center"><input type="submit" value="Por Cliente" name="act2" class="tab">                  </td>
      </form>
      <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
      <form action="cadastro_boleto_carregado_cancelado.htm">
          <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
      </form>
      <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
      <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
      <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
      <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
      <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
      <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
      <td valign="bottom" class="cel_tab" width="100%">&nbsp;</td>
    </tr>
  </table>
    <br>
  <table width="100%" cellpadding="3" cellspacing="1" 
        bgcolor="#cccccc"  id="pesquisaAvancada">
      <tbody>
        <tr bgcolor="#fafafa">
          <td width="10%" nowrap="nowrap" bgcolor="#efefef"><div align="right"><strong>Per&iacute;odo</strong></div></td>
          <td><font color="black">
            <select name="select5">
              <option>Jan
              <option>Fev
              <option>Mar
              <option>Abr
              <option>Mai                        
              <option>Jun
              <option>Jul
              <option>Ago
              <option selected>Set 
              <option>Out                          
              <option>Nov
              <option>Dez
            </select>
            <select name="select">
              <option>2003
              <option>2004
              <option>2005</option>
              <option>2006</option>
              <option selected>2007</option>
            </select>
            a
            <select name="select3">
              <option>Jan
              <option>Fev
              <option>Mar
              <option>Abr
              <option>Mai                        
              <option>Jun
              <option>Jul
              <option>Ago
              <option selected>Set 
              <option>Out                          
              <option>Nov
              <option>Dez
            </select>
            <select name="select4">
              <option>2003
              <option>2004
              <option>2005</option>
              <option>2006</option>
              <option selected>2007</option>
            </select>
          </font></td>
          <td width="20%" rowspan="2"><div align="center"><font color="black">
            <form name="formc" method='post' action="{{ url('Consultor') }}" enctype = "multipart/form-data">
              @CSRF
              <button style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_relatorio.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" onmousemove="loadData()" onmouseout="clearData()"  name="btSalvar22" />Relat&oacute;rio</button>
              <input type="hidden" name="aux" id="aux" value="0">
            </form>
            <form action="con_desem_consultor_graf.htm">
              <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_grafico.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Gr&aacute;fico" name="btSalvar222" />
            </form>
            <form action="con_desem_consultor_pizza.htm">
              <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_pizza.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Pizza" name="btSalvar222" />
            </form>
          </font>
        </div>
      </td>
    </tr>
    <tr bgcolor="#fafafa">
        <td nowrap="nowrap" bgcolor="#efefef"><div align="right"><strong>Consultores</strong></div></td>
        <td><table align="center">
        <tr>
                <td>
                  <select multiple size="8" name="list1" id="list1" style="width:280">
                  @foreach($consultores as $key => $consultor)          
                    <option value="{{$consultor->co_usuario}}" >{{$consultor->no_usuario}}</option>
                  @endforeach
                  </select>
                </td>
                <td align="center" valign="middle"><input name="button" type="button" onClick="move(list1,list2)" value=">>">
                    <br>
                    <input name="button" type="button" onClick="move(list2,list1)" value="<<">
                </td>
                <td><select multiple size="8" name="list2" id="list2" style="width:280">
                  </select>
                    <input type="hidden"  name="lista_analista" value="">
                </td>
              </tr>
          </table></td>
        </tr>
      </tbody>
    </table>
    <p><br>
      <br>
      <br>
      <br>
      </form>
  </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;    </p></td>
</tr>
</table></TD>
<TD noWrap width=10><IMG 
src="inc/spacer.gif" 
width=10>
</TD>
</TR>
</TBODY>
</TABLE>
<BR>

<script>
    function loadData(){
      var chilNode = document.getElementById('list2').childNodes;
      var aux = document.getElementById('aux').value;
      console.log(aux);
      var selectedKeyValue = {};
      var arrayOfSelecedIDs=[];
      if(aux == 0 ){ 
        for(i=1;i<chilNode.length;i++){
          var inpt = document.createElement('input');
          inpt.type="hidden";
          inpt.name="consultor_"+i;
          inpt.id="consultor_"+i;
          inpt.value = chilNode[i].value;
          document.formc.appendChild(inpt);
          document.getElementById('aux').value = i;
        }
      }
    }
    
    function clearData(){
       let aux = document.getElementById('aux').value;
       if(aux > 0){
          for(i=1;i<=aux;i++){
               let elemento = document.getElementById('consultor_'+i); 
               elemento.parentNode.removeChild(elemento);
          }
          document.getElementById('aux').value = 0;
       }
    }

</script>
@endsection

