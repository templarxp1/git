<?php

final class Clientes 
{
    function ListaClientes() {
        return Model_cliente::consulta();
    }
}
