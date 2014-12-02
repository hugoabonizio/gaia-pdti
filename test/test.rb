require 'rubygems'
require 'capybara'
require 'capybara/dsl'
require 'capybara/poltergeist'

Capybara.run_server = false

Capybara.current_driver = :poltergeist
Capybara.app_host = 'http://localhost:3000'

include Capybara::DSL

p visit('/')