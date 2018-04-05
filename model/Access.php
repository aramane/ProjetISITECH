<?php

class Access
{
    public static function admin()
    {
        if($_SESSION)
        {
            if($_SESSION['type'] == 'A')
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    public static function adminOrSalesManager()
    {
        if($_SESSION)
        {
            if($_SESSION['type'] == 'DC' || $_SESSION['type'] == 'A')
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    public static function salesManager()
    {
        if($_SESSION)
        {
            if($_SESSION['type'] == 'DC')
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    
    public static function client()
    {
        if($_SESSION)
        {
            if($_SESSION['type'] == 'C')
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    
    public static function connected()
    {
        if($_SESSION)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

