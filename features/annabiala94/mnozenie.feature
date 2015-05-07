Feature: Obliczenia

  Scenario: Mnozenie a*b*c*d
    Given I am on homepage
    When I follow "Mnozenie by annabiala94"
    And I fill in "a" with "1"
    And I fill in "b" with "2"
    And I fill in "c" with "3"
    And I fill in "d" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 24"
