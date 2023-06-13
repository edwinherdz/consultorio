<?php

function setActive($routeName)
{
	return request()->routeIs($routeName) ? 'bg-cyan-300':'';
}
