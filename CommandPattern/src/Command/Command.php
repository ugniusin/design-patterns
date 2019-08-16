<?php

namespace CommandPattern\Command;

interface Command
{
    public function execute();

    public function unexecute();
}
