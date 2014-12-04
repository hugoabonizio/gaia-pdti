#encoding: utf-8
require 'rubygems'
require 'capybara'
require 'capybara/dsl'
require 'capybara/poltergeist'
require 'rspec'

Capybara.run_server = false

Capybara.current_driver = :poltergeist
Capybara.app_host = 'http://localhost:3000'

RSpec.configure do |config|
  config.include Capybara::DSL
end

describe "Basic" do
  it "home is rendering" do
    visit "/"
    expect(page).to have_content('Missão')
  end
  
  it "subpage is rendering" do
    visit "/index.php/descricao"
    expect(page).to have_content('Descrição sucinta do município')
  end
end